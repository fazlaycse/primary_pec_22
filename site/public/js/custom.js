var tData = [];

var teacherDataMerged = function () {
    /*data field fixing*/
    var jsonParsed = JSON.parse(teacherData);
    for (var i = 0; i < jsonParsed.length; i++) {
        tData.push(
            {
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
                short_tr_1: jsonParsed[i].short_tr_1,
                short_tr_2: jsonParsed[i].short_tr_2,
                short_tr_3: jsonParsed[i].short_tr_3,
                short_tr_4: jsonParsed[i].short_tr_4,
                short_tr_5: jsonParsed[i].short_tr_5,
                short_tr_6: jsonParsed[i].short_tr_6,
                long_tr_1: jsonParsed[i].long_tr_1,
                long_tr_2: jsonParsed[i].long_tr_2,
                long_tr_3: jsonParsed[i].long_tr_3,
                long_tr_4: jsonParsed[i].long_tr_4,
                long_tr_5: jsonParsed[i].long_tr_5,
                long_tr_6: jsonParsed[i].long_tr_6,
                tlv_mon_tr_1: jsonParsed[i].tlv_mon_tr_1,
                tlv_mon_tr_2: jsonParsed[i].tlv_mon_tr_2,
                tlv_mon_tr_3: jsonParsed[i].tlv_mon_tr_3,
                tlv_mon_tr_4: jsonParsed[i].tlv_mon_tr_4,
                tlv_mon_tr_5: jsonParsed[i].tlv_mon_tr_5,
                tlv_mon_tr_6: jsonParsed[i].tlv_mon_tr_6
            }
        );
    }
};
teacherDataMerged();
console.log(tData);
var app = new Vue({
    el: '#app',
    data: {
        rowData: tData //the declared array
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
                short_tr_1: 'no',
                short_tr_2: 'no',
                short_tr_3: 'no',
                short_tr_4: 'no',
                short_tr_5: 'no',
                short_tr_6: 'no',
                long_tr_1: 'no',
                long_tr_2: 'no',
                long_tr_3: 'no',
                long_tr_4: 'no',
                long_tr_5: 'no',
                long_tr_6: 'no',
                tlv_mon_tr_1: 'no',
                tlv_mon_tr_2: 'no',
                tlv_mon_tr_3: 'no',
                tlv_mon_tr_4: 'no',
                tlv_mon_tr_5: 'no',
                tlv_mon_tr_6: 'no',
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
                    window.location.href = 'thanking_page';
                })
                .catch(function (error) {
                    console.log(error)
                });
        }
    }
});

