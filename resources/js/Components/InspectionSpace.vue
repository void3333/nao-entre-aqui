<template>
 Status: <span class="font-bold" :class="statusClass(inspection.status)" >{{ inspection.status }}</span> <br>
 Ordem de Serviço: <span class="font-bold">{{ inspection.serviceOrder}}</span> <br>
 Certificado: <span class="font-bold">{{ inspection.certificate}}</span> <br>
 Container: <span class="font-bold">{{ inspection.container}}</span> <br>
 Inspetor: <span class="font-bold">{{ inspection.inspector}}</span> <br>
 Ajudante: <span class="font-bold">{{ inspection.staff}}</span> <br>
 Data: <span class="font-bold">{{ inspection.date}}</span> <br>
 Local: <span class="font-bold">{{ inspection.location}}</span> <br>
 Destino: <span class="font-bold">{{ inspection.destination}}</span> <br>
  </template>
  <script>
  export default {
    methods: {
      statusClass(status) {
        switch (status) {
          case 'Programado':
            return 'text-blue';
          case 'Inspecionado':
            return 'text-orange';
          case 'Certificado':
            return 'text-green';
          case 'Faturado':
            return 'text-gray';
          case 'Jornada Improdutiva':
            return 'text-purple';
          case 'Cancelado':
            return 'text-red';
          default:
            return 'text-black';
        }
      }
    }
  };
  </script>
  <style>
  .text-blue {
    color: rgb(0, 132, 255);
  }
  .text-green {
    color: green;
  }
  .text-orange {
    color: orange;
  }
  .text-purple {
    color: rgb(202, 11, 202);
  }
  .text-red {
    color: red;
  }
  .text-gray {
    color: gray;
  }
  </style>

<script setup>
defineProps({
    inspection: Object,
})

</script>
