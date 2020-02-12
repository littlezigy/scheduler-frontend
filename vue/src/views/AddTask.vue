<style>
button, label {
    display: block;
}
</style>

<template>
<div>
    <label>
        Task Name: <input type = 'text' placeholder = 'Task name'>
    </label>
    Deadline <input type = 'date' v-model = 'end_date'>
    <p>With the time you have to complete this task, do you have enough time?</p>
    <label v-for = '(phrase, index) in timing' :key = 'index'>
        <input type = 'radio' name = 'duration' v-model = 'duration_factor' :value = index>{{phrase}}
    </label>

    <button v-if = 'advanced === false'  @click = 'advanced = true'>Show Advanced</button>
    <button v-if = 'advanced === true' @click = 'advanced = false'>Hide Advanced</button>

    <div v-show = 'advanced'>
        <label>
            Estimated Task Duration: <input type = 'text' v-model = 'duration_phrase'>
        </label>
        Start Date: <input type = 'date' v-model = 'start_date' v-show = 'advanced'>
    </div>

    <button v-if = 'advanced === true' @click = 'advanced = false'>Hide Advanced</button>
</div>
</template>

<script>
export default {
    data() {
        return {
            advanced: false,
            timing: ['Way too much time', 'I\'m good', 'I\'ll manage', 'Enough time'],
            duration: '',
            duration_phrase: '',
            duration_factor: 0.1,
            start_date: '',
            end_date: ''
        }
    },
    computed: {       
            //let duration = this.duration.split(/([0-9]+)/);
            //console.log("duration array", duration);

    }
}
</script>
