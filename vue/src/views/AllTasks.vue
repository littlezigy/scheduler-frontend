<style>
div#tasks > div {
    padding: 1em;
    margin-bottom: 2em;
    border: 1px solid pink;
    border-radius: 2em;
}
.task_name {
    font-size: 1.5em;
}
</style>

<template>
	<div id = 'tasks'>
        <div v-for = '(task, index) in tasks' :key = index>
            <p class = 'task_name'>{{ task.name }}</p>
            <p class = 'task_due'>Due {{ task.due }}</p>
            <p class = 'text-right small task_duration'>Task takes an estimated {{ task.est_duration }} to complete</p>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            tasks: [{
                'name': 'Task 1',
                'due': '1 month 3 weeks',
                'est_duration': '6 hours'
            }, {
                'name': 'Task 2',
                'due': 'Wednesday',
                est_duration: '5 days'
            }, {
                name: 'Task 3',
                due: 'Next Monday',
                est_duration: '10 weeks'
            }]
        }
    }
}
</script>
