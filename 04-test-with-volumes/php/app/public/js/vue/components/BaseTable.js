Vue.component("table-base", {
    props: ["headers", "rows"],
    template: `
        <table class="table table-striped table-hover">
            <thead class="grey lighten-2">
                <tr>
                    <th scope="col" v-for="header in headers">{{header.text}}</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(row, key, index) in rows">
                    <td v-for="header in headers">
                        <span v-if="header.type === 'indice'">
                            {{key+1}}
                        </span>
                        <span v-else-if="header.type === 'valor'">
                            {{row[header.value]}}
                        </span>
                        <span v-else-if="header.type === 'computado'">
                            <span v-for="valor in header.value.values">{{row[valor]}}{{header.value.separator}}</span>{{header.value.separator}}
                        </span>
                        <span v-else-if="header.type === 'html'">
                            <div v-html="header.value"></div>
                        </span>
                        <span v-else>
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
    `
});
hola = [
    { text: "#", type: "indice" },
    { text: "Username", type: "valor", value: "nickname" },
    { text: "Nombre Completo", type: "computado", value: { values: ["firstname", "lastname"], separator: " " } },
    { text: "Acciones", type: "html", value: "" }
];
