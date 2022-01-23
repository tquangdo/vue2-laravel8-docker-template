# LangController

API for multi language

## index()


default function, put arg into session

> Example request:

```bash
curl -X GET \
    -G "http://localhost/language/rerum?language1=en&language2=jp&language3=cn" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/language/rerum"
);

let params = {
    "language1": "en",
    "language2": "jp",
    "language3": "cn",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

{
   name: "LangController",
   description: " API for multi language",
   item: [
       {
           name: "index()",
           request: {
           url: {
           protocol: "http",
           host: "baseUrl",
           path: "language/:language",
           query: [
               {
                   key: "language1",
                   value: "en",
                   description: "The English language.",
                   disabled: false
               },
               {
                   key: "language2",
                   value: "jp",
                   description: "The Japanese language.",
                   disabled: false
               }
           ],
           raw: "http://baseUrl/language/:language?language1=en&language2=jp",
           variable: [
               {
               id: "language",
               key: "language",
               value: "eius",
               description: ""
               }
           ]
           },
           method: "GET",
           header: [
               {
                   key: "Content-Type",
                   value: "application/json"
               },
               {
                   key: "Accept",
                   value: "application/json"
               }
           ],
           body: null,
           description: "default function, put arg into session",
           auth: {
               type: "noauth"
           }
       },
       header: null,
       cookie: [ ],
       body: "null"
     }
   ]
}
```
<div id="execution-results-GETlanguage--language-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETlanguage--language-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETlanguage--language-"></code></pre>
</div>
<div id="execution-error-GETlanguage--language-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETlanguage--language-"></code></pre>
</div>
<form id="form-GETlanguage--language-" data-method="GET" data-path="language/{language}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETlanguage--language-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETlanguage--language-" onclick="tryItOut('GETlanguage--language-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETlanguage--language-" onclick="cancelTryOut('GETlanguage--language-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETlanguage--language-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>language/{language}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>language</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="language" data-endpoint="GETlanguage--language-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>language1</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="language1" data-endpoint="GETlanguage--language-" data-component="query"  hidden>
<br>
The English language.
</p>
<p>
<b><code>language2</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="language2" data-endpoint="GETlanguage--language-" data-component="query"  hidden>
<br>
The Japanese language.
</p>
<p>
<b><code>language3</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="language3" data-endpoint="GETlanguage--language-" data-component="query"  hidden>
<br>
The Chinese language.
</p>
</form>



