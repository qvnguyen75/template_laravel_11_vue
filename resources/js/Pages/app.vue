<template>
</template>

<script setup>
    const props = defineProps({
        // Value from HomeController
        myValue: Number
  });
    console.log(props.myValue)
</script>