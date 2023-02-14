<template>
    <form @submit.prevent="create">
        <div class="grid grid-cols-6 gap-4">
            <div class="col-span-2">
                <label class="label">Ordem de Seriço:</label>
        <input v-model.number="form.serviceOrder" type="text" class="input" />
                <div v-if="form.errors.serviceOrder">
                    {{ form.errors.serviceOrder }}
                </div>
            </div>


            <div class="col-span-2">
                <label class="block mb-1 text-gray-500 dark:text-gray-300 font-medium">Certificado: </label>
                <input v-model="form.certificate" type="text"
                    class="block w-full p-2 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 text-gray-500" />
                <div v-if="form.errors.certificate">
                    {{ form.errors.certificate }}
                </div>
            </div>


            <div class="col-span-2">
                <label class="block mb-1 text-gray-500 dark:text-gray-300 font-medium">Serviço: </label>
                <input v-model="form.scope" type="text"
                    class="block w-full p-2 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 text-gray-500" />
                <div v-if="form.errors.scope">
                    {{ form.errors.scope }}
                </div>
            </div>

            <div class="col-span-2">
                <label class="block mb-1 text-gray-500 dark:text-gray-300 font-medium">Container: </label>
                <input v-model="form.container" type="text"
                    class="block w-full p-2 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 text-gray-500" />
                <div v-if="form.errors.container">
                    {{ form.errors.container }}
                </div>
            </div>

            <div class="col-span-2">
                <label class="block mb-1 text-gray-500 dark:text-gray-300 font-medium">Status</label>
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

            <div class="col-span-2">
                <label class="block mb-1 text-gray-500 dark:text-gray-300 font-medium">Inspetor: </label>
                <input v-model="form.inspector" type="text"
                    class="block w-full p-2 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 text-gray-500" />
                <div v-if="form.errors.inspector">
                    {{ form.errors.inspector }}
                </div>
            </div>

            <div class="col-span-2">
                <label class="block mb-1 text-gray-500 dark:text-gray-300 font-medium">Ajudante: </label>
                <input v-model="form.staff" type="text"
                    class="block w-full p-2 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 text-gray-500" />
                <div v-if="form.errors.staff">
                    {{ form.errors.staff }}
                </div>
            </div>

            <div class="col-span-2">
                <label class="block mb-1 text-gray-500 dark:text-gray-300 font-medium">Data: </label>
                <input v-model="form.date" type="date"
                    class="block w-full p-2 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 text-gray-500" />
                <div v-if="form.errors.date">
                    {{ form.errors.date }}
                </div>
            </div>

            <div class="col-span-2">
                <label class="block mb-1 text-gray-500 dark:text-gray-300 font-medium">Local: </label>
                <input v-model="form.location" type="text"
                    class="block w-full p-2 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 text-gray-500" />
                <div v-if="form.errors.location">
                    {{ form.errors.location }}
                </div>
            </div>

            <div class="col-span-2">
                <label class="block mb-1 text-gray-500 dark:text-gray-300 font-medium">Destino: </label>
                <input v-model="form.destination" type="text"
                    class="block w-full p-2 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 text-gray-500" />
                <div v-if="form.errors.destination">
                    {{ form.errors.destination }}
                </div>
            </div>

            <div class="col-span-2">
                <label class="block mb-1 text-gray-500 dark:text-gray-300 font-medium">Ordem: </label>
                <input v-model="form.order" type="text"
                    class="block w-full p-2 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 text-gray-500" />
                <div v-if="form.errors.order">
                    {{ form.errors.order }}
                </div>
            </div>

            <div class="col-span-2">
                <label class="block mb-1 text-gray-500 dark:text-gray-300 font-medium">Contrato: </label>
                <input v-model="form.contract" type="text"
                    class="block w-full p-2 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 text-gray-500" />
                <div v-if="form.errors.contract">
                    {{ form.errors.contract }}
                </div>
            </div>

            <div class="col-span-2">
                <label class="block mb-1 text-gray-500 dark:text-gray-300 font-medium">Nomeação: </label>
                <input v-model="form.nomination" type="text"
                    class="block w-full p-2 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 text-gray-500" />
                <div v-if="form.errors.nomination">
                    {{ form.errors.nomination }}
                </div>
            </div>

            <div class="col-span-2">
                <label class="block mb-1 text-gray-500 dark:text-gray-300 font-medium">Exportador: </label>
                <input v-model="form.exporter" type="text"
                    class="block w-full p-2 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 text-gray-500" />
                <div v-if="form.errors.exporter">
                    {{ form.errors.exporter }}
                </div>
            </div>

            <div class="col-span-2">
                <label class="block mb-1 text-gray-500 dark:text-gray-300 font-medium">Importador: </label>
                <input v-model="form.importer" type="text"
                    class="block w-full p-2 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 text-gray-500" />
                <div v-if="form.errors.importer">
                    {{ form.errors.importer }}
                </div>
            </div>

            <div class="col-span-2">
                <label class="block mb-1 text-gray-500 dark:text-gray-300 font-medium">Quantidade de Caixas: </label>
                <input v-model="form.productQty" type="text"
                    class="block w-full p-2 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 text-gray-500" />
                <div v-if="form.errors.productQty">
                    {{ form.errors.productQty }}
                </div>
            </div>

            <div class="col-span-2">
                <label class="block mb-1 text-gray-500 dark:text-gray-300 font-medium">Produto: </label>
                <input v-model="form.generalProduct" type="text"
                    class="block w-full p-2 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 text-gray-500" />
                <div v-if="form.errors.generalProduct">
                    {{ form.errors.generalProduct }}
                </div>
            </div>

            <div class="col-span-2">
                <label class="block mb-1 text-gray-500 dark:text-gray-300 font-medium">Peso Líquido: </label>
                <input v-model="form.netW" type="text"
                    class="block w-full p-2 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 text-gray-500" />
                <div v-if="form.errors.netW">
                    {{ form.errors.netW }}
                </div>
            </div>

            <div class="col-span-2">
                <label class="block mb-1 text-gray-500 dark:text-gray-300 font-medium">Peso Bruto: </label>
                <input v-model="form.grossW" type="text"
                    class="block w-full p-2 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 text-gray-500" />
                <div v-if="form.errors.grossW">
                    {{ form.errors.grossW }}
                </div>
            </div> <br>

            <div class="col-span-6">
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-500 text-white font-medium p-2 rounded-md">Salvar Programação</button>
            </div>
        </div>
    </form>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3'
const form = useForm({
    serviceOrder: null,
    certificate: null,
    scope: null,
    container: null,
    status: null,
    inspector: null,
    staff: null,
    date: null,
    location: null,
    destination: null,
    order: null,
    contract: null,
    nomination: null,
    exporter: null,
    importer: null,
    productQty: null,
    generalProduct: null,
    netW: null,
    grossW: null,
})
const create = () => form.post(route('inspection.store'))
</script>

<style scoped>
label {
    margin-right: 2em;
}

div {
    padding: 2px
}
</style>