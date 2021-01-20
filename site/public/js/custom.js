/*data field fixing*/
var tData = [];
var teacherDataMerged = function () {

    var jsonParsed = [JSON.parse(teacherData)];
    for (var i = 0; i < jsonParsed.length; i++) {
        var my_object = {
            tname_bangla: jsonParsed[i].tname_bangla,
            tname_english: jsonParsed[i].tname_english,
            dob: jsonParsed[i].dob,
            sex: jsonParsed[i].sex,
            ethinicity: jsonParsed[i].ethinicity,
            deisgnation: jsonParsed[i].deisgnation,
            inst_deisgnated: jsonParsed[i].inst_deisgnated,
            inst_present: jsonParsed[i].inst_present,
            edu_degree: jsonParsed[i].edu_degree,
            joining_dt: jsonParsed[i].joining_dt,
            class_six_eight: jsonParsed[i].class_six_eight,
            short_training: jsonParsed[i].short_training,
            long_training: jsonParsed[i].long_training,
            twelve_month_training: jsonParsed[i].twelve_month_training
        };
        tData.push(my_object);
    }
};

var app = new Vue({
    el: '#app',
    data: {
        rowData: [] //the declared array
    },
    methods: {
        addItem() {
            // console.log(JSON.parse(teacherData));
            var my_object = {
                tname_bangla: '',
                tname_english: '',
                dob: '',
                sex: '',
                ethinicity: '',
                deisgnation: '',
                inst_deisgnated: '',
                inst_present: '',
                edu_degree: '',
                joining_dt: '',
                class_six_eight: '',
                short_training: '',
                long_training: '',
                twelve_month_training: ''
            };
            console.log(this.rowData);
            this.rowData.push(my_object)
        },
        submitTeacherInfo(e) {

            e.preventDefault();
            let currentObj = this;
            Vue.http.headers.common['X-CSRF-TOKEN'] = $('#token').val();
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

