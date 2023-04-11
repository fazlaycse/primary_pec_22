var tData = [];

var washbolocks_merged = function () {
    /*data field fixing*/
    var jsonParsed = JSON.parse(washbolocks);
    console.log(jsonParsed);
    for (var i = 0; i < jsonParsed.length; i++) {
        tData.push(
            {
                'wsblk_amount' : jsonParsed[i].wsblk_amount,
                'w_es_year' : jsonParsed[i].w_es_year,
                'wsblk_user' : jsonParsed[i].wsblk_user,
                'wsblk_condition' : jsonParsed[i].wsblk_condition,
                'wsblk_std_yn' : jsonParsed[i].wsblk_std_yn,
                'cleaning_agent_yn' : jsonParsed[i].cleaning_agent_yn,
                'toilet_water_yn' : jsonParsed[i].toilet_water_yn,
                'hand_wash_yn' : jsonParsed[i].hand_wash_yn,
                'toilet_project' : jsonParsed[i].toilet_project
            }
        );
    }
};
washbolocks_merged();

var app = new Vue({
    el: '#app',
    data: {
        rowData: tData
    },
    methods: {
        addItem() {
            // console.log(JSON.parse(teacherData));
            var my_object = {
                'wsblk_amount' : '',
                'w_es_year' : '',
                'wsblk_user' : '',
                'wsblk_condition' : '',
                'wsblk_std_yn' : '',
                'cleaning_agent_yn' : '',
                'toilet_water_yn' : '',
                'hand_wash_yn' : '',
                'toilet_project' : ''

            };
            this.rowData.push(my_object)
        },
        submitSixthPage(e) {
            e.preventDefault();
            let currentObj = this;
            Vue.http.headers.common['X-CSRF-TOKEN'] = $('#token').val();
            this.$http.post('sixth_page_save', this.rowData)
                .then(function (response) {
                    window.location.href = 'fifth_page';
                })
                .catch(function (error) {
                    alert('Error: Could not save data!')
                });
        }
    }
});

