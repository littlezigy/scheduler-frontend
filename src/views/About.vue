<style>
span#new_name {
    font-style: italic;
    font-weight: 700;
}
.quote {
    background: #e3e3e3;
    color: green;
    display: block;
    text-align: center;
}
.quote::before, .quote::after {
    content: '"';
    font-size: 1.2em;
    font-weight: bold;
}
</style>

<template>
  <div class="about">
    <h1>Scheduler</h1>
    <p>Thanks for using {{ name }}</p>
    <p>Now, unlike other Todo list apps, {{ name }}  helps you complete tasks before they are due. The best part of Scheduler is its intelligence. It could almost be called a Personal Assistant</p>
    <p>{{name}}'s main goal is to help you complete tasks on time, before their due dates. {{name}} does this by assigning tasks to times it knows you're not busy.</p>
    <p>When you're adding a task, you'll notice the question <span class = 'quote'>With the time you have to complete this task, do you have enough time?</span> If you select one of the options, {{ name }} will estimate a duration. Under Advanced Options, you can set this duration yourself.</p>
    <p class = 'small'>Note: I am planning to rename this to maybe <span id = 'new_name'>Personal Assistant *<u>something</u>*</span>. I am bad at coming up with names so if you have better suggestions, contact me.</p>
  </div>
</template>

<script>
export default{
    data() {
        return {
            name: 'Scheduler'
        }
    }
}
</script>
