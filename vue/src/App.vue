<template>
  <div id="app">
    <nav id="nav">
    </nav>
    <div id = 'container'>
        <nav id = 'menu'>
            <div id = 'burger' :class = '{active: showMenu}' @click = 'showMenu = !showMenu'>
                <div></div>
            </div>

            <router-link :class = '{active: showMenu}' to = '/'>Dashboard</router-link>
            <router-link :class = '{active: showMenu}' to="/tasks">All Tasks</router-link>
            <router-link :class = '{active: showMenu}' to="/tasks/add" >Add Task</router-link>
            <router-link :class = '{active: showMenu}' to='/about'>About</router-link>
            <router-link :class = '{active: showMenu}' to="/agenda">Agenda</router-link>

        </nav>

        <div class = 'overlay' :class = '{active: showMenu}'></div>

        <div id = 'stats'>
            <img id = 'user_profile' />
        </div>

        <div id = 'page'>
            <transition name = 'fade' mode = 'out-in' @before-enter = 'beforeEnter' appear>
                <router-view/>
            </transition>
        </div>
    </div>
  </div>
</template>

<script>
export default{
    data() {
        return {
            showMenu: false,
            appName: 'Scheduler'
        }
    },
    methods: {
        beforeEnter() {
            this.showMenu = false;
            this.$root.$emit('scrollBeforeEnter');
        }
    }
}
</script>
<style>
:root {
    --pink: pink;
    --blue: powderblue;
}
.pink {
    background-color: var(--pink);
}
.blue {
    background-color: var(--blue);
}

#app {
    font-family: Avenir, Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    color: #2c3e50;
}
div, p, nav, section, main {
    box-sizing: border-box;
    padding: 0;
    margin: 0;
}
div#container {
        display: flex;
}

div#stats {
    padding: 0 2%;
}
nav#menu a {
    display: block;
    cursor: pointer;
    padding: 0.5em 1em;
    margin: 0.1rem 0;
    background: #a7a6a6;
    color: black;
}

a:visited, a:active {
    color: inherit;
    text-decoration: none;
}
.text-center {
    text-align: center;
}
.text-right {
    text-align: right;
}
img#user_profile {
    width: 90%;
    height: 10em;
    margin: auto;
}
@media only screen and (max-width: 918px) {
    div#burger {
        width: 40px;
    }
    nav#menu a {
        font-size: 2em;
        font-weight: bold;
        display: none;
    }
    nav#menu a.active {
        display: block !important;
    }
    div.overlay.active{
        display: block;
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        background: #e3e3e3;
        z-index: 1;
    }

    nav#menu {
        z-index: 2;
    }
    nav div#burger::before, div#burger::after, div#burger > div {
        background: rgb(7, 1, 1);
        border-radius: 3px;
        content: "";
        display: block;
        height: 5px;
        margin: 7px 0;
        transition: all .2s ease-in-out;
        z-index: 2;
    }
    div#burger.active::before {
        transform: translateY(12px) rotate(135deg);
    }
    div#burger.active::after {
        transform: translateY(-12px) rotate(-135deg);
    }
    div#burger.active > div {
        transform: scale(0);
    }

    div#container {
        padding: 10%;
        flex-direction: column;
    }
    label {
        display:  block;
    }

    div#stats {
        order: 4;
    }

}

@media only screen and (min-width: 919px) {
    .small {
        font-size: 0.8rem;
        margin: 0.4rem 0rem;
    }

    div#page {
        flex: 2 0 50%;
    }

    div#stats {
        flex: 1 3 9em;
        order: 3;
    }

    nav#nav {
      padding: 30px;
    }

    nav#menu{
        flex: 1 3 6em;
        background: lightgrey;
    }
}

#nav a {
  font-weight: bold;
  color: #2c3e50;
}

#nav a.router-link-exact-active {
  color: #42b983;
}
</style>
