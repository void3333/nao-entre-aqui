<template>
  <span> 
    Serviço: {{ inspection.scope }} <br>
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
