var tData = [];

var sanitation_info_merged = function () {
    /*data field fixing*/
    var jsonParsed = JSON.parse(institute_sanitations);
    console.log(jsonParsed);
    for (var i = 0; i < jsonParsed.length; i++) {
        tData.push(
            {
                'toilet_no' : jsonParsed[i].toilet_no,
                'toilet_users' : jsonParsed[i].toilet_users,
                'toilet_curcond' : jsonParsed[i].toilet_curcond,
                'clean_mat_yn' : jsonParsed[i].clean_mat_yn,
                'hand_soap_yn' : jsonParsed[i].hand_soap_yn,
                'toi_water_yn' : jsonParsed[i].toi_water_yn,
                'toi_project' : jsonParsed[i].toi_project,
                'institute_id' : parseInt(jsonParsed[i].institute_id),
                'year' : parseInt(jsonParsed[i].year),
            }
        );
    }
};
sanitation_info_merged();

var app = new Vue({
    el: '#app',
    data: {
        rowData: tData
    },
    methods: {
        addItem() {
            // console.log(JSON.parse(teacherData));
            var my_object = {
                'toilet_no' : '',
                'toilet_users' : 1,
                'toilet_curcond' : 1,
                'clean_mat_yn' : 1,
                'hand_soap_yn' : 1,
                'toi_water_yn' : 1,
                'toi_project' : 1,
                'institute_id' : parseInt(institute_id),
                'year' : parseInt(2020),
            };
            this.rowData.push(my_object)
        },
        submitFifthPage(e) {
            e.preventDefault();
            let currentObj = this;
            Vue.http.headers.common['X-CSRF-TOKEN'] = $('#token').val();
            this.$http.post('fifth_page_save', this.rowData)
                .then(function (response) {
                    window.location.href = '/sixth_page';
                })
                .catch(function (error) {
                    alert('Error: Could not save data!')
                });
        }
    }
});

