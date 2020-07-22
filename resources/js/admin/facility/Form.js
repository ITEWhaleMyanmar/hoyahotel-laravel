import AppForm from '../app-components/Form/AppForm';

Vue.component('facility-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                title:  '' ,
                perex:  '' ,
                published_at:  '' ,
                enabled:  false ,
            },
            mediaCollections: ['gallery']
        }
    }

});