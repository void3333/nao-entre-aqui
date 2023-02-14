<template>
    <form @submit.prevent="update">
        <div>
            <div>
                <label>O.S</label>
                <input v-model="form.serviceOrder" type="text" />
                <div v-if="form.errors.serviceOrder">
                    {{ form.errors.serviceOrder }}
                </div>
            </div>

            <div>
                <label>Certificado</label>
                <input v-model="form.certificate" type="text" />
                <div v-if="form.errors.certificate">
                    {{ form.errors.certificate }}
                </div>
            </div>

            <div>
                <label>Serviço</label>
                <input v-model="form.scope" type="text" />
                <div v-if="form.errors.scope">
                    {{ form.errors.scope }}
                </div>
            </div>

            <div>
                <label>Container</label>
                <input v-model="form.container" type="text" />
                <div v-if="form.errors.container">
                    {{ form.errors.container }}
                </div>
            </div>

            <div>
                <label>Status</label>
                <select v-model="form.status">
                    <option value="Programado">Programado</option>
                    <option value="Inspecionado">Inspecionado</option>
                    <option value="Certificado">Certificado</option>
                    <option value="Faturado">Faturado</option>
                    <option value="Jornada Improdutiva">Jornada Improdutiva</option>
                    <option value="Cancelado">Cancelado</option>
                </select>
                <div v-if="form.errors.status">
                    {{ form.errors.status }}
                </div>
            </div>

            <div>
                <label>Inspetor</label>
                <input v-model="form.inspector" type="text" />
                <div v-if="form.errors.inspector">
                    {{ form.errors.inspector }}
                </div>
            </div>

            <div>
                <label>Ajudante</label>
                <input v-model="form.staff" type="text" />
                <div v-if="form.errors.staff">
                    {{ form.errors.staff }}
                </div>
            </div>

            <div>
                <label>Data</label>
                <input v-model="form.date" type="date" />
                <div v-if="form.errors.date">
                    {{ form.errors.date }}
                </div>
            </div>

            <div>
                <label>Local</label>
                <input v-model="form.location" type="text" />
                <div v-if="form.errors.location">
                    {{ form.errors.location }}
                </div>
            </div>

            <div>
                <label>Destino</label>
                <input v-model="form.destination" type="text" />
                <div v-if="form.errors.destination">
                    {{ form.errors.destination }}
                </div>
            </div>

            <div>
                <label>Ordem</label>
                <input v-model="form.order" type="text" />
                <div v-if="form.errors.order">
                    {{ form.errors.order }}
                </div>
            </div>

            <div>
                <label>Contrato</label>
                <input v-model="form.contract" type="text" />
                <div v-if="form.errors.contract">
                    {{ form.errors.contract }}
                </div>
            </div>

            <div>
                <label>Nomeação</label>
                <input v-model="form.nomination" type="text" />
                <div v-if="form.errors.nomination">
                    {{ form.errors.nomination }}
                </div>
            </div>

            <div>
                <label>Exportador</label>
                <input v-model="form.exporter" type="text" />
                <div v-if="form.errors.exporter">
                    {{ form.errors.exporter }}
                </div>
            </div>

            <div>
                <label>Importador</label>
                <input v-model="form.importer" type="text" />
                <div v-if="form.errors.importer">
                    {{ form.errors.importer }}
                </div>
            </div>

            <div>
                <label>Quantidade</label>
                <input v-model="form.productQty" type="text" />
                <div v-if="form.errors.productQty">
                    {{ form.errors.productQty }}
                </div>
            </div>

            <div>
                <label>Produto</label>
                <input v-model="form.generalProduct" type="text" />
                <div v-if="form.errors.generalProduct">
                    {{ form.errors.generalProduct }}
                </div>
            </div>

            <div>
                <label>Líquido</label>
                <input v-model="form.netW" type="text" />
                <div v-if="form.errors.netW">
                    {{ form.errors.netW }}
                </div>
            </div>

            <div>
                <label>Bruto</label>
                <input v-model="form.grossW" type="text" />
                <div v-if="form.errors.grossW">
                    {{ form.errors.grossW }}
                </div>
            </div>

            <div>
                <button type="submit">Editar</button>
            </div>
        </div>
    </form>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3'

const props = defineProps({
    inspection: Object,
})

const form = useForm({
    serviceOrder: props.inspection.serviceOrder,
    certificate: props.inspection.certificate,
    scope: props.inspection.scope,
    container: props.inspection.container,
    status: props.inspection.status,
    inspector: props.inspection.inspector,
    staff: props.inspection.staff,
    date: props.inspection.date,
    location: props.inspection.location,
    destination: props.inspection.destination,
    order: props.inspection.order,
    contract: props.inspection.contract,
    nomination: props.inspection.nomination,
    exporter: props.inspection.exporter,
    importer: props.inspection.importer,
    productQty: props.inspection.productQty,
    generalProduct: props.inspection.generalProduct,
    netW: props.inspection.netW,
    grossW: props.inspection.grossW,
})
const update = () => form.put(`/inspection/${props.inspection.id}`)
</script>

<style scoped>
label {
    margin-right: 2em;
}

div {
    padding: 2px
}
</style>