<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>后台系统</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <script src="https://cdn.staticfile.org/vue/2.1.6/vue.min.js"></script>
  <script src="https://cdn.staticfile.org/vue-resource/1.0.3/vue-resource.min.js"></script>
</head>
<body>
<div id="app">
 <input type="checkbox" id="jack" value="3" v-model="checkedNames">
 <label for="jack">Jack</label>
 <input type="checkbox" id="john" value="1" v-model="checkedNames">
 <label for="john">John</label>
 <input type="checkbox" id="mike" value="2" v-model="checkedNames">
 <label for="mike">Mike</label>
 <br>
 <span>Checked names: {{ checkedNames }}</span>
</div>

<script type="text/javascript">
var lo = window.onload=function () {
    var vm = new Vue({
        el: '#app',
        data: {
            checkedNames: []
        },

    })
};
if(lo){
console.log(lo);
}else{
console.log('sdfsdf');
}

</script>
</body>
</html>