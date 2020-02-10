<template>
  <div class="home">
    <div id = 'task-now'>
       <p class = 'text-center title'>{{task_title}}</p>
       <p class = 'description'>{{task_description}}</p>
       <p class = 'text-right small'>{{task_duration}}</p>
       <p class = 'text-right small'>{{due_date}}</p>
    </div>
  </div>
</template>

<script>

export default {
  name: 'Home',
  data() {
    return {
        'task_title': "Title 1",
        'task_description': "Sample Description is just some random text I'm using to fill up this space and maybe see how much this design can handle blah blah.",
        'task_duration': '3 hours',
        'due_date': 'Next Wednesday'
    }
  }
}
</script>

<style>
#task-now {
    border: 1px solid pink;
    border-radius: 2em;
    padding: 2em;
}
@media only screen and (max-width: 380px) {
    #task-now {
        padding: 1em !important;
    }
}
p.descrption {
    text-align: justify;
}
.title {
    font-size: 2em;
}
</style>
