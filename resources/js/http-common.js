import state from "./global.js"
import {validation} from "./global.js";
class Request { 
    postRequest(obj) {
        state.initialState.fname = obj.txtfirstname;
        state.initialState.lname = obj.txtlastname;
        validation(state.initialState.fname, state.initialState.lname);
        if(state.initialState.validateTrigger) { //true
            return alert("Empty firstname or lastname please try again");
        }else{
            return new Promise((resolve) => {
                $.ajax({
                    method: 'post',
                    url: 'app/helper.php',
                    data: obj,
                    success: function(response){
                        return resolve(response);
                    }
                })
            })
        }
    }
}


export default new Request();