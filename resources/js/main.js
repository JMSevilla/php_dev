import jsrequest from "./http-common.js";
ELEMENT.locale(ELEMENT.lang.en)

new Vue({
    el: "#index_app",
    data: function(){
        return {
            task : {
                txtfirstname : '', txtlastname : ''
            }
        }
    },
    methods: {
        onsubmit: function(){
            jsrequest.postRequest(this.task).then((res) => {
                // var jsondestroyer = JSON.parse(res);
                // if(jsondestroyer.success == "200" || jsondestroyer.success == 200) {
                //     alert("Successfully Added");
                // }
                console.log(res)
            });
        }
    }
})
