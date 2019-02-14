<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>    
</head>
<body>


<div id="app">
    <div class="container">
        <button class="btn btn-success mt-5 mb-5" @click="addNewSection">
            New Deal Section
        </button>

        <div class="card mb-3" v-for="(section, index) in sections">
            <hr>
            <div class="card-body">
                <button class="btn btn-success mt-5 mb-5" @click="addNewItem(index)"> <!-- passing the index -->
                    New Item
                </button>

                <span class="float-right" style="cursor:pointer">
                    X
                </span>

                <h4 class="card-title">Deal section {{ index + 1}}</h4>

                <div class="employee-form" v-for="(addition, index) in section.additionals"> <!-- additionals of the section -->
                    <input type="text" class="form-control mb-2" placeholder="Item" v-model="addition.item">
                </div>

                <div class="employee-form">
                    <input type="text" class="form-control mb-2" placeholder="Item" v-model="section.item">
                </div>
            </div>
        </div>
    </div>
</div>




<script>
    var app = new Vue({
        el: '.container',
        data: {
            sections: [
                {
                    item: '',
                    additionals: [] // <-
                }
            ]

        },
        methods: {
            addNewSection() {
                this.sections.push({
                    item: '',
                    additionals: [] // <-
                })
            },
            addNewItem(id) {
                // passing the id of the section
                this.sections[id].additionals.push({
                    item: ''
                })
            }
        }
    })
</script>

</body>
</html>


