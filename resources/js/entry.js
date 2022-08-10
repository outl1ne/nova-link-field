import IndexField from './components/IndexField';
import DetailField from './components/DetailField';
import FormField from './components/FormField';

Nova.booting((Vue, router) => {
  Vue.component('index-o1-link-field', IndexField);
  Vue.component('detail-o1-link-field', DetailField);
  Vue.component('form-o1-link-field', FormField);
});
