<template>
    <AppFooter>
        <p>Copyright &copy; {{ year }} </p>
    </AppFooter>
</template>

<script>
  import { computed } from 'vue'
  
  export default {
    setup () {
      const year = computed(() => new Date().getFullYear())
      return { year }
    }
  }
</script>