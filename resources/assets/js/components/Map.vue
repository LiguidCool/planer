<template>
<div style="height: 100vh">
    <v-map :zoom="zoom" :center="center">
        <v-tilelayer :url="url" :attribution="attribution"></v-tilelayer>
        <v-marker v-for="bts in btses" :lat-lng="position(bts)" :key="bts.name">
        </v-marker>
    </v-map>
</div>
</template>

<script>
export default {
    mounted() {
        console.log('Component mounted.');
        self = this;
        axios.get('/bts')
            .then(function(res){
                self.btses = res.data;
            })
        ;

    },
    data() {
        return {
            zoom: 10,
            center: [55.754883, 37.622863],
            url: 'http://{s}.tile.osm.org/{z}/{x}/{y}.png',
            attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
            // defaultIcon: L.icon({
            //   iconUrl: 'http://leafletjs.com/examples/custom-icons/leaf-green.png',
            //   shadowUrl: 'http://leafletjs.com/examples/custom-icons/leaf-shadow.png',
            //   iconSize:     [38, 95],
            //   shadowSize:   [50, 64],
            //   iconAnchor:   [22, 94],
            //   shadowAnchor: [4, 62],
            //   popupAnchor:  [-3, -76]
            // }),
            // selectedIcon: L.icon({
            //   iconUrl: 'http://leafletjs.com/examples/custom-icons/leaf-red.png',
            //   shadowUrl: 'http://leafletjs.com/examples/custom-icons/leaf-shadow.png',
            //   iconSize:     [38, 95],
            //   shadowSize:   [50, 64],
            //   iconAnchor:   [22, 94],
            //   shadowAnchor: [4, 62],
            //   popupAnchor:  [-3, -76]
            // }),
            btses: [],
            // btses: [{
            //         name: 'Contact1',
            //         lat: 55.792998,
            //         lng: 37.835349,
            //         // position: [55.792998, 37.835349],
            //         // icon: this.defaultIcon
            //     },
            //     {
            //         name: 'Contact2',
            //         lat: 47.443220,
            //         lng: -1.219482,
            //         // position: [47.443220, -1.219482],
            //         // icon: this.defaultIcon
            //     }
            // ]
        }
    },
    methods: {
        position: function(item) {
            return L.latLng(item.lat, item.lng);
        }
    },
}
</script>

<style>
.leaflet-pane .leaflet-shadow-pane {
    display: none;
}
</style>
