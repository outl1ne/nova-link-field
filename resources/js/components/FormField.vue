<template>
  <DefaultField :field="field" :errors="errors" :show-help-text="showHelpText">
    <template #field>
      <a
        v-if="field.href"
        @click.stop
        :target="field.target"
        :href="field.href"
        class="link-default no-underline font-bold dim"
      >
        {{ field.text || field.value || field.href }}
      </a>
      <span v-else>&mdash;</span>
    </template>
  </DefaultField>
</template>

<script>
import { FormField, HandlesValidationErrors } from 'laravel-nova';

export default {
  mixins: [FormField, HandlesValidationErrors],

  props: ['resourceName', 'resourceId', 'field'],

  methods: {
    fill(formData) {
      //
    },
  },
};
</script>
