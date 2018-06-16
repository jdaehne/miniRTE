# miniRTE
Mini Rich-Text-Editor TV input type. The Extra lets you easily format text in an text input field to create HTML formatted output. All Buttons can be configured by an JSON.


# Usage 
Create an tv with the type minirte and configure your Buttons in the Configurations-Field via JSON. The extra works inside a MIGX.
The Input-Option "Enable Linebreaks" turns the TV from a regular textfield into a textarea. The inputarea will automatically grow with the input.

## Button Configuration
Default Buttons:
```
[
{"command":"undo","icon":"undo"},
{"command":"bold","icon":"bold"},
{"command":"underline","icon":"underline"},
{"command":"italic","icon":"italic"},
{"command":"forecolor","value":"063bd5","icon":"paint-brush","style":""},
{"command":"justifyLeft","icon":"align-left"},
{"command":"justifyCenter","icon":"align-center"},
{"command":"justifyRight","icon":"align-right"}
]
```

For every button you can define:

| key | description |
| --- | --- |
| command | You can find a list of possible Commands under: |
| icon | classname of a font-awesome icon. Example: bold |
| value | Optional value for commands that require an input like a font-size or a color. Example: FFFFFF |
| style | Optional CSS styles to restyle the button. You may want to give a button the color of the font-color. Example: FCFCFC |
