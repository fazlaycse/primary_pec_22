
var app = new Vue({
    el: '#app',
    data: {
        selected_thana: thana_id || 0,
        selected_union: union_id || 0,
        options_thana: [
            { text: '-Select-', value: '0' },
            { text: 'Khilgaon, Dhaka', value: '1'},
            { text: 'Ghatail, Tangail ', value: '2' },
            { text: 'Shaturia, Manikganj', value: '3' },
            { text: 'Nawabganj, Dhaka', value: '4' },
            { text: 'Anowara, Chattogram ', value: '5' },
            { text: 'Shubornochar, Noakhali', value: '6' },
            { text: 'Langodu, Rangamati ', value: '7' },
            { text: 'Dighinala, Khagrachhari ', value: '8' },
            { text: 'Khalishpur, Khulna', value: '9' },
            { text: 'Shyamnagar, Shatkhira', value: '10' },
            { text: 'Magura Pourashova, Magura', value: '11' },
            { text: 'Nachol, Chapai Nawabganj ', value: '12' },
            { text: 'Tanore, Rajshahi', value: '13' },
            { text: 'Shujanagar, Pabna', value: '14' },
            { text: 'Rangpur Sadar, Rangpur', value: '15' },
            { text: 'Roumari, Kurigram', value: '16' },
            { text: 'Parbatipur, Dinajpur', value: '17' },
            { text: 'Nolchiti, Jhalokathi', value: '18' },
            { text: 'Borhanuddin, Bhola', value: '19' },
            { text: 'Madhabpur, Habiganj ', value: '20' },
            { text: 'Nalitabari, Sherpur', value: '21' },
            { text: 'Gouripur, Mymensingh ', value: '22' }
        ],
        options_union_all:{
            0:["-Select-"],
            1:["Word No 3", "Word No 12", "Word No 13"],
            2:["Char Jhaukanda 57", "Char Harirampur 38", "Char Bhradrasan 19"],
            3:["Maheshpur 47", "Chandpur 27", "Amirganj 10"],
            4:["Puichhari 63", "Kalipur 44", "Chhanua 25"],
            5:["Munshirhat 71", "Gunabati 42", "Gholpasha 38"],
            6:["Alikadam 31", "Chokhyong 63", "Nayapara 80"],
            7:["Taindang-83", "Gumti-47", "Tubalchhari_76"],
            8:["Ward no. 20", "Ward no. 16 (part)", "Ward no. 17"],
            9:["Khontakata 38", "Dhansagar 19", "South khali 76"],
            10:["Ward no. 21", "Ward no. 16", "Ward no. 18(part)"],
            11:["Kayempur 43", "Jalalpur 29", "Gala 14"],
            12:["Kodaikati 57", "Mohonganj 76", "Char Rajibpur 19"],
            13:["Singra 76", "Palsa 57", "Balakipur 19"],
            14:["Gachhua 35", "Nazirpur 71", "Char kalekhan 23"],
            15:["Aminibad 15", "Rasulpur 87", "Osmanganj 95"],
            16:["Kalighat 38", "Rajghat 57", "Satgaon 66"],
            17:["Char Aomkhaoa 29", "Dangdhara 51", "Chikajani 36"],
        },
        options_union:[]
    },
    methods:{
        changeThanaId(){
            this.options_union = this.options_union_all[this.selected_thana];
        }
    },
    beforeMount(){
        this.changeThanaId();
    }
});
