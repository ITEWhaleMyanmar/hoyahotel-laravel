<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CurrentSpecialOffer\BulkDestroyCurrentSpecialOffer;
use App\Http\Requests\Admin\CurrentSpecialOffer\DestroyCurrentSpecialOffer;
use App\Http\Requests\Admin\CurrentSpecialOffer\IndexCurrentSpecialOffer;
use App\Http\Requests\Admin\CurrentSpecialOffer\StoreCurrentSpecialOffer;
use App\Http\Requests\Admin\CurrentSpecialOffer\UpdateCurrentSpecialOffer;
use App\Models\CurrentSpecialOffer;
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

class CurrentSpecialOfferController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexCurrentSpecialOffer $request
     * @return array|Factory|View
     */
    public function index(IndexCurrentSpecialOffer $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(CurrentSpecialOffer::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            [''],

            // set columns to searchIn
            ['']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.current-special-offer.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.current-special-offer.create');

        return view('admin.current-special-offer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreCurrentSpecialOffer $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreCurrentSpecialOffer $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the CurrentSpecialOffer
        $currentSpecialOffer = CurrentSpecialOffer::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/current-special-offers'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/current-special-offers');
    }

    /**
     * Display the specified resource.
     *
     * @param CurrentSpecialOffer $currentSpecialOffer
     * @throws AuthorizationException
     * @return void
     */
    public function show(CurrentSpecialOffer $currentSpecialOffer)
    {
        $this->authorize('admin.current-special-offer.show', $currentSpecialOffer);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param CurrentSpecialOffer $currentSpecialOffer
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(CurrentSpecialOffer $currentSpecialOffer)
    {
        $this->authorize('admin.current-special-offer.edit', $currentSpecialOffer);


        return view('admin.current-special-offer.edit', [
            'currentSpecialOffer' => $currentSpecialOffer,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCurrentSpecialOffer $request
     * @param CurrentSpecialOffer $currentSpecialOffer
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateCurrentSpecialOffer $request, CurrentSpecialOffer $currentSpecialOffer)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values CurrentSpecialOffer
        $currentSpecialOffer->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/current-special-offers'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/current-special-offers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyCurrentSpecialOffer $request
     * @param CurrentSpecialOffer $currentSpecialOffer
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyCurrentSpecialOffer $request, CurrentSpecialOffer $currentSpecialOffer)
    {
        $currentSpecialOffer->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyCurrentSpecialOffer $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyCurrentSpecialOffer $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    CurrentSpecialOffer::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
