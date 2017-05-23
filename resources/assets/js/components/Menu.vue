<template>
    <div class="menu col-xs-11 col-sm-10 col-sm-offset-1 col-md-10">
        <div class="title">How confusing would you like your menu?</div>
        <!--<span></span>-->
        <div class="filters btn-group">
            <button class="btn btn-default"  @click="visibility='norm'">Normal</button>
            <button class="btn btn-default"  @click="visibility='nerdy'">Nerdy</button>
            <button class="btn btn-default" @click="visibility='fantastical'">Fantastical</button>
        </div>
        
         <transition-group name="list-complete" tag="div">
            <div 
            v-for="item in MenuOptions"
            :key="item"
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
        <!--</ul>-->
    </div>
</template>


<script>

import MenuImport from '../bin/menuNorm.js'
import MenuNerdy from '../bin/menuNerdy.js'
import MenuFantastical from '../bin/menuFantastical.js'


export default {
    name: "MainMenu",
    data() {
        return {
            visibility: 'norm',
            
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
}



</script>

<style lang="stylus">  
</style>