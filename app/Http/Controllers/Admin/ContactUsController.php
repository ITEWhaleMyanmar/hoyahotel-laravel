<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ContactU\BulkDestroyContactU;
use App\Http\Requests\Admin\ContactU\DestroyContactU;
use App\Http\Requests\Admin\ContactU\IndexContactU;
use App\Http\Requests\Admin\ContactU\StoreContactU;
use App\Http\Requests\Admin\ContactU\UpdateContactU;
use App\Models\ContactU;
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

class ContactUsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexContactU $request
     * @return array|Factory|View
     */
    public function index(IndexContactU $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(ContactU::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'email', 'phone'],

            // set columns to searchIn
            ['id', 'email', 'phone', 'address']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.contact-u.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.contact-u.create');

        return view('admin.contact-u.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreContactU $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreContactU $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the ContactU
        $contactU = ContactU::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/contact-us'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/contact-us');
    }

    /**
     * Display the specified resource.
     *
     * @param ContactU $contactU
     * @throws AuthorizationException
     * @return void
     */
    public function show(ContactU $contactU)
    {
        $this->authorize('admin.contact-u.show', $contactU);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param ContactU $contactU
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(ContactU $contactU)
    {
        $this->authorize('admin.contact-u.edit', $contactU);


        return view('admin.contact-u.edit', [
            'contactU' => $contactU,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateContactU $request
     * @param ContactU $contactU
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateContactU $request, ContactU $contactU)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values ContactU
        $contactU->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/contact-us'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/contact-us');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyContactU $request
     * @param ContactU $contactU
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyContactU $request, ContactU $contactU)
    {
        $contactU->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyContactU $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyContactU $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    ContactU::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
