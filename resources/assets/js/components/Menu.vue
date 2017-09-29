<template>
<div>
  <button class="clickit btn btn-default"
  @click="menuOpen = !menuOpen">
   |||
  </button>
<transition
name="slide"
v-on:after-enter="ssinit">
    <div 
    id="theMenu" 
    class="menu"
    v-if="menuOpen"
    >
    
        <div class="mm-title">NateTheAverage</div>
        <!--<span></span>-->
        <!-- <div class="filters btn-group">
            <button class="btn btn-default"  @click="visibility='norm'">Normal</button>
            <button class="btn btn-default"  @click="visibility='nerdy'">Nerdy</button>
            <button class="btn btn-default" @click="visibility='fantastical'">Fantastical</button>
        </div> -->
        
         <transition-group name="list-complete" tag="div">
            <div 
            v-for="item in MenuOptions"
            :key="1"
            class="m-title list-complete-item">
            {{item.title}}
                <div class="btn-group-vertical" role="group">
                    <a class="btn btn-default m-link" 
                    v-for="item in item.contents"
                    :href="item.url">
                    {{item.name}}
                    </a>
                </div>
            </div>
        </transition-group>
    </div>
  </transition>
</div>
</template>


<script>

import MenuImport from '../bin/menuNorm.js'

export default {
    name: "MainMenu",
    data() {
        return {
            visibility: 'norm',
            menuOpen: false,
        }
    },
    computed: {
        MenuOptions: function () {
            let vis = this.visibility
            let filteredMenu = []
            for(let i in MenuImport){
                if(vis=='norm'){
                    filteredMenu.push(MenuImport[i].norm)
                }else if(vis=='nerdy'){
                    filteredMenu.push(MenuImport[i].nerd)
                }else if(vis=='fantastical'){
                    filteredMenu.push(MenuImport[i].fantastical)
                }
            }
            return filteredMenu
        },
    },
    methods: {
      ssinit: () => {
        const el = document.querySelector('.menu');
        SimpleScrollbar.initEl(el);
      }
    },
}



</script>

<style lang="stylus">
.clickit
  top: 5px;
  left: 5px;
  padding: 0 10px 5px;
  font-size: 26px;

  z-index: 999999999;
.theMenu
  position fixed
.slide-enter-active, .slide-leave-active {
  transition: all .5s ease
}
.slide-enter, .slide-leave-to /* .fade-leave-active in <2.1.8 */ {
  transform: translateX(-2000px)
}
</style>