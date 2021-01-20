
var app = new Vue({
    el: '#app',
    data: {
        rowData:teacherData //the declared array
    },
    methods:{
        addItem(){
            // console.log(JSON.parse(teacherData));
            var my_object = {
                tname_bangla:'',
                tname_english:'',
                dob:'',
                sex:'',
                ethinicity:'',
                deisgnation:'',
                inst_deisgnated:'',
                inst_present:'',
                edu_degree:'',
                joining_dt:'',
                class_six_eight:'',
                short_training:'',
                long_training:'',
                twelve_month_training:''
            };
            console.log(this.rowData);
            this.rowData.push(my_object)
        },
        submitTeacherInfo(e){

            e.preventDefault();
            let currentObj = this;
            Vue.http.headers.common['X-CSRF-TOKEN'] =  $('#token').val();
            this.$http.post('teacher_info_page_save', this.rowData)
                .then(function (response) {
                    console.log(response)
                })
                .catch(function (error) {
                    console.log(error)

                });
        }
    }
});

