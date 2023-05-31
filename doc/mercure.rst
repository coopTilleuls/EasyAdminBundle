Mercure
=======

You can add real-time push notifications to EasyAdmin if you run a `Mercure hub`_. By doing so, a user would get notified if another user is editing the same entity.

To enable real-time push notification, you need to require the `mercure bundle`_ in your project


.. code-block:: terminal

    $ composer require mercure

Then you need to configure the environment variables ``MERCURE_PUBLIC_URL``, ``MERCURE_URL`` and ``MERCURE_JWT_SECRET`` with ther right urls and the right secret for your Mercure hub

.. note::

    If you have multiple configured Mercure hubs, you can chose which one
    will be used by EasyAdmin by setting the ``ea.hub`` parameter to the name 
    of the hub in your project config


.. _`Mercure hub`: https://mercure.rocks
.. _`mercure bundle`: https://symfony.com/doc/current/mercure.html
