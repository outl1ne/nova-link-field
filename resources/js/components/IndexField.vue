<template>
  <div :class="`text-${field.textAlign}`">
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
  </div>
</template>

<script>
export default {
  props: ['resourceName', 'field'],
};
</script>
