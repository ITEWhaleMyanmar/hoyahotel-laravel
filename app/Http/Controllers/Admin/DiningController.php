<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Dining\BulkDestroyDining;
use App\Http\Requests\Admin\Dining\DestroyDining;
use App\Http\Requests\Admin\Dining\IndexDining;
use App\Http\Requests\Admin\Dining\StoreDining;
use App\Http\Requests\Admin\Dining\UpdateDining;
use App\Models\Dining;
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

class DiningController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexDining $request
     * @return array|Factory|View
     */
    public function index(IndexDining $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Dining::class)->processRequestAndGet(
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

        return view('admin.dining.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.dining.create');

        return view('admin.dining.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreDining $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreDining $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Dining
        $dining = Dining::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/dinings'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/dinings');
    }

    /**
     * Display the specified resource.
     *
     * @param Dining $dining
     * @throws AuthorizationException
     * @return void
     */
    public function show(Dining $dining)
    {
        $this->authorize('admin.dining.show', $dining);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Dining $dining
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Dining $dining)
    {
        $this->authorize('admin.dining.edit', $dining);


        return view('admin.dining.edit', [
            'dining' => $dining,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateDining $request
     * @param Dining $dining
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateDining $request, Dining $dining)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Dining
        $dining->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/dinings'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
                'object' => $dining
            ];
        }

        return redirect('admin/dinings');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyDining $request
     * @param Dining $dining
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyDining $request, Dining $dining)
    {
        $dining->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyDining $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyDining $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Dining::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
