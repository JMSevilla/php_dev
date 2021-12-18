<div style="margin-top: 10px; margin-bottom : 10px;" class="row">
    <div class="col-sm">
        <span>Firstname</span>
    <el-input
    type="text"
    placeholder="Enter firstname"
    v-model="task.txtfirstname"
    ></el-input>
    </div>
    <div class="col-sm">
    <span>Lastname</span>
    <el-input
    type="text"
    placeholder="Enter lastname"
    v-model="task.txtlastname"
    ></el-input>
    </div>
</div>

<el-button
type="primary"
plain
style="float: right; margin-top: 10px; margin-bottom : 10px;"
size="medium"
@click="onsubmit()"
>Submit</el-button>