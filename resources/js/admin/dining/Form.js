import AppForm from '../app-components/Form/AppForm';

Vue.component('dining-form', {
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