var tData = [];

var building_infos_merged = function () {
    /*data field fixing*/
    var jsonParsed = JSON.parse(building_infos);
    for (var i = 0; i < jsonParsed.length; i++) {
        tData.push(
            {
                'building_no' : jsonParsed[i].building_no,
                'storied_number' : jsonParsed[i].building_no,
                'estb_year' : jsonParsed[i].estb_year,
                'bld_foundation' : jsonParsed[i].bld_foundation,
                'room_number' : jsonParsed[i].room_number,
                'bld_condition' : jsonParsed[i].bld_condition,
                'bld_projt_name' : jsonParsed[i].bld_projt_name,
                'bld_ramp_yn' : jsonParsed[i].bld_ramp_yn,
                'building_id' : jsonParsed[i].building_id,
            }
        );
    }
};
building_infos_merged();
// console.log(JSON.parse(buildings));
var app = new Vue({
    el: '#app',
    data: {
        rowData: tData, //the declared array
        buildings:JSON.parse(buildings)
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
                    window.location.href = '/';
                })
                .catch(function (error) {
                    console.log(error)
                });
        }
    }
});

