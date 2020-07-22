@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.contact-u.actions.edit', ['name' => $contactU->email]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <contact-u-form
                :action="'{{ $contactU->resource_url }}'"
                :data="{{ $contactU->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.contact-u.actions.edit', ['name' => $contactU->email]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.contact-u.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </contact-u-form>

        </div>
    
</div>

@endsection