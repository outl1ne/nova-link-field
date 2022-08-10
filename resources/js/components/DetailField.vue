<template>
  <PanelItem :index="index" :field="field">
    <template #value>
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
  </PanelItem>
</template>

<script>
export default {
  props: ['index', 'resource', 'resourceName', 'resourceId', 'field'],
};
</script>
