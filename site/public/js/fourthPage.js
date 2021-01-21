var tData = [];

var building_infos_merged = function () {
    /*data field fixing*/
    var jsonParsed = JSON.parse(building_infos);
    for (var i = 0; i < jsonParsed.length; i++) {
        tData.push(
            {
                'building_no' : jsonParsed[i].building_no,
                'building_no_1' : jsonParsed[i].building_no,
                'storied_number' : jsonParsed[i].building_no,
                'storied_number_1' : jsonParsed[i].building_no,
                'storied_number_2' :jsonParsed[i].building_no,
                'estb_year',
                'estb_year_1',
                'estb_year_2',
                'bld_foundation',
                'bld_foundation_1',
                'bld_foundation_2',
                'room_number',
                'room_numbe_1',
                'room_numbe_2',
                'bld_condition',
                'bld_condition_1',
                'bld_condition_2',
                'bld_projt_name',
                'bld_projt_name_1',
                'bld_projt_name_2',
                'bld_ramp_yn',
                'bld_ramp_yn_1',
                'bld_ramp_yn_2',
                'year',
                'institute_id',
                'building_id',
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

