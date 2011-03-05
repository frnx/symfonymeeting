<?php

/* HelloBundle:Hello:welcome.html.twig */
class __TwigTemplate_d3384bd0abdb15dfb8302ea16d536b62 extends Twig_Template
{
    public function display(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>Congratulations</title>
    </head>
    <body>
        <h1>Congratulations!</h1>
        <p>You have successfully created a new Symfony application.</p>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "HelloBundle:Hello:welcome.html.twig";
    }
}
