<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ThingsToDo\BulkDestroyThingsToDo;
use App\Http\Requests\Admin\ThingsToDo\DestroyThingsToDo;
use App\Http\Requests\Admin\ThingsToDo\IndexThingsToDo;
use App\Http\Requests\Admin\ThingsToDo\StoreThingsToDo;
use App\Http\Requests\Admin\ThingsToDo\UpdateThingsToDo;
use App\Models\ThingsToDo;
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

class ThingsToDoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexThingsToDo $request
     * @return array|Factory|View
     */
    public function index(IndexThingsToDo $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(ThingsToDo::class)->processRequestAndGet(
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

        return view('admin.things-to-do.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.things-to-do.create');

        return view('admin.things-to-do.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreThingsToDo $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreThingsToDo $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the ThingsToDo
        $thingsToDo = ThingsToDo::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/things-to-dos'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/things-to-dos');
    }

    /**
     * Display the specified resource.
     *
     * @param ThingsToDo $thingsToDo
     * @throws AuthorizationException
     * @return void
     */
    public function show(ThingsToDo $thingsToDo)
    {
        $this->authorize('admin.things-to-do.show', $thingsToDo);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param ThingsToDo $thingsToDo
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(ThingsToDo $thingsToDo)
    {
        $this->authorize('admin.things-to-do.edit', $thingsToDo);


        return view('admin.things-to-do.edit', [
            'thingsToDo' => $thingsToDo,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateThingsToDo $request
     * @param ThingsToDo $thingsToDo
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateThingsToDo $request, ThingsToDo $thingsToDo)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values ThingsToDo
        $thingsToDo->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/things-to-dos'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
                'object' => $thingsToDo
            ];
        }

        return redirect('admin/things-to-dos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyThingsToDo $request
     * @param ThingsToDo $thingsToDo
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyThingsToDo $request, ThingsToDo $thingsToDo)
    {
        $thingsToDo->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyThingsToDo $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyThingsToDo $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    ThingsToDo::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
