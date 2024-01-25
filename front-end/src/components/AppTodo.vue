<script>
import axios from 'axios';

export default {
  name: 'AppTodo',
  data() {
    return {
      list: []
    }
  },
  mounted() {

    const t = this;
    axios.get('http://localhost/todosApi.php')
    .then(res => {

      t.list = res.data;
    }).catch(err => console.error(err));
  }
}
</script>

<template>
<h1>To do list of: {{ list.length }} Todos!</h1>
    <ul>
        <li v-for="(todos, i) in list" :key="i">{{ todos.todo }}</li>
    </ul>
</template>

<style scoped>

</style>