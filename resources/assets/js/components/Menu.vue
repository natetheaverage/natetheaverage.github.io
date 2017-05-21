<template>
    <div class="menu">
        <div class="title">MENU</div>
        <span>How confusing would you like your menu?</span>
        <ul class="filters">
            <li><button @click="visibility='norm'">Normal</button></li>
            <li><button @click="visibility='nerdy'">Nerdy</button></li>
            <li><button @click="visibility='fantastical'">Fantastical</button></li>
        </ul>
        
        <ul>
         <transition-group name="list-complete" tag="li">
            <li 
            v-for="item in filteredMenu"
            :key="item"
            class="list-complete-item">
                <span>{{item.title}}</span>
                <ul>
                    <li v-for="item in item.contents">
                        <a :href="link">{{item.name}}</a>
                    </li>
                </ul>
            </li>
        </transition-group>
        </ul>
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
            filteredMenu:  []
        }
    },
    computed: {
        MenuOptions: function () {
            for(let i in MenuImport){
                if(this.visibility=='norm'){
                    this.filteredMenu.push(MenuImport[i].norm)
                }else if(this.visibility=='nerdy'){
                    this.filteredMenu.push(MenuImport[i].nerd)
                }else if(this.visibility=='fantastical'){
                    this.filteredMenu.push(MenuImport[i].fantastical)
                }
            }
        },
    },
}



</script>

<style lang="stylus">  
</style>