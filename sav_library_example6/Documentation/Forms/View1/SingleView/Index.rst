
.. include:: ../../../Includes.txt

.. _singleView.116452986:
.. role:: red

===========
Single view
===========


.. _singleView.116452986.107716962:

View ``Single``
===============

This view contains the following configuration.

Title Bar
---------

::

   ###name###

Selected Fields
---------------

.. _singleView.116452986.107716962.222419149.tx_savlibraryexample6.name:

**Field**: ``name``

**Type:** :ref:`String <savlibrarykickstarter:string>`

.. _singleView.116452986.107716962.222419149.tx_savlibraryexample6.address:

**Field**: ``address``

**Type:** :ref:`Text <savlibrarykickstarter:textarea>`

.. _singleView.116452986.107716962.222419149.tx_savlibraryexample6.registration:

**Field**: ``registration``

**Type:** :ref:`Checkboxes <savlibrarykickstarter:checkboxes>`

**Configuration:**

::

  - cols = 1


.. _singleView.116452986.107716962.222419149.tx_savlibraryexample6.email:

**Field**: ``email``

**Type:** :ref:`String <savlibrarykickstarter:string>`

**Configuration:**

::

  - func = makeEmailLink


.. _singleView.116452986.107716962.222419149.tx_savlibraryexample6.email_flag:

**Field**: ``email_flag``

**Type:** :ref:`Checkbox <savlibrarykickstarter:checkbox>`

**Configuration:**

::

  - fusion = begin


.. _singleView.116452986.107716962.222419149.tx_savlibraryexample6.email_language:

**Field**: ``email_language``

**Type:** :ref:`Selectorbox <savlibrarykickstarter:selectorbox>`

**Configuration:**

::

  - fusion = end


.. _singleView.116452986.107716962.222419149.tx_savlibraryexample6.invoice:

**Field**: ``invoice``

**Type:** :ref:`Link <savlibrarykickstarter:link>`

**Configuration:**

::

  - generatertf = 1
  - savefilertf = fileadmin/###tx_savlibraryexample6.name###.rtf





