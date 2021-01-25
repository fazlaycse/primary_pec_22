var tData = [];

var building_infos_merged = function () {
    /*data field fixing*/
    var jsonParsed = JSON.parse(building_infos);
    console.log(jsonParsed);
    for (var i = 0; i < jsonParsed.length; i++) {
        tData.push(
            {
                'building_no' : jsonParsed[i].building_no,
                'storied_number' : jsonParsed[i].storied_number,
                'estb_year' : jsonParsed[i].estb_year,
                'bld_foundation' : jsonParsed[i].bld_foundation,
                'room_number' : jsonParsed[i].room_number,
                'bld_condition' : jsonParsed[i].bld_condition,
                'bld_projt_name' : jsonParsed[i].bld_projt_name,
                'bld_ramp_yn' : jsonParsed[i].bld_ramp_yn
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
                'building_no' : '',
                'storied_number' : '',
                'estb_year' : '',
                'bld_foundation' : '',
                'room_number' : '',
                'bld_condition' : '',
                'bld_projt_name' : '',
                'bld_ramp_yn' : ''
            };
            console.log(this.rowData);
            this.rowData.push(my_object)
        },
        submitFourthPage(e) {
            e.preventDefault();
            let currentObj = this;
            Vue.http.headers.common['X-CSRF-TOKEN'] = $('#token').val();
            this.$http.post('fourth_page_save', {'buildings_number':this.buildings.number_of_building, 'building_infos':this.rowData})
                .then(function (response) {
                    window.location.href = '/fifth_page';
                })
                .catch(function (error) {
                    alert('Error: Could not save data!')
                });
        }
    }
});

