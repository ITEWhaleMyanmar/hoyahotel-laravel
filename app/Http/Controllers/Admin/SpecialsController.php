<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Special\BulkDestroySpecial;
use App\Http\Requests\Admin\Special\DestroySpecial;
use App\Http\Requests\Admin\Special\IndexSpecial;
use App\Http\Requests\Admin\Special\StoreSpecial;
use App\Http\Requests\Admin\Special\UpdateSpecial;
use App\Models\Special;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class SpecialsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexSpecial $request
     * @return array|Factory|View
     */
    public function index(IndexSpecial $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Special::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'title', 'published_at', 'enabled'],

            // set columns to searchIn
            ['id', 'title', 'perex']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.special.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.special.create');

        return view('admin.special.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreSpecial $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreSpecial $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Special
        $special = Special::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/specials'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/specials');
    }

    /**
     * Display the specified resource.
     *
     * @param Special $special
     * @throws AuthorizationException
     * @return void
     */
    public function show(Special $special)
    {
        $this->authorize('admin.special.show', $special);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Special $special
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Special $special)
    {
        $this->authorize('admin.special.edit', $special);


        return view('admin.special.edit', [
            'special' => $special,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateSpecial $request
     * @param Special $special
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateSpecial $request, Special $special)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Special
        $special->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/specials'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
                'object' => $special
            ];
        }

        return redirect('admin/specials');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroySpecial $request
     * @param Special $special
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroySpecial $request, Special $special)
    {
        $special->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroySpecial $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroySpecial $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Special::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
