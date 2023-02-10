<template>
  <span>
    O.S: {{ inspection.serviceOrder }} <br>
    Certificado: {{ inspection.certificate }} <br>
    Serviço: {{ inspection.scope }} <br>
    Container: {{ inspection.container }} <br>
    Status: {{ inspection.status }} <br>
    Inspetor: {{ inspection.inspector }} <br>
    Assistente: {{ inspection.staff }} <br>
    Data: {{ inspection.date }} <br>
    Local: {{ inspection.location }} <br>
    Destino: {{ inspection.destination }} <br>
    Ordem: {{ inspection.order }} <br>
    Contrato: {{ inspection.contract }} <br>
    Nomeação: {{ inspection.nomination }} <br>
    Exportador: {{ inspection.exporter }} <br>
    Importador: {{ inspection.importer }} <br>
    Quantidade: {{ inspection.productQty }} <br>
    Produto: {{ inspection.generalProduct }} <br>
    Líquido: {{ inspection.netW }} <br>
    Bruto: {{ inspection.grossW }} <br>
  </span>
</template>

<script setup>
defineProps({
  inspection: Object,
})

</script>
