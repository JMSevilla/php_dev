const initialState = { 
    fname : "",
    lname : "",
    validateTrigger: true
}

export function validation(f, l){
    if(!f || !l) {
        return initialState.validateTrigger = true;
    }else{
        return initialState.validateTrigger = false;
    }
}

export default { 
    initialState
}

