
.. include:: ../../../Includes.txt

.. _editView.116452986:
.. role:: red

=========
Edit view
=========


.. _editView.116452986.131916066:

View ``Edit``
=============

This view contains the following configuration.

Title Bar
---------

::

   ###name###

Selected Fields
---------------

.. _editView.116452986.131916066.222419149.tx_savlibraryexample6.name:

**Field**: ``name``

**Type:** :ref:`String <savlibrarykickstarter:string>`

.. _editView.116452986.131916066.222419149.tx_savlibraryexample6.address:

**Field**: ``address``

**Type:** :ref:`Text <savlibrarykickstarter:textarea>`

.. _editView.116452986.131916066.222419149.tx_savlibraryexample6.registration:

**Field**: ``registration``

**Type:** :ref:`Checkboxes <savlibrarykickstarter:checkboxes>`

**Configuration:**

::

  - cols = 1


.. _editView.116452986.131916066.222419149.tx_savlibraryexample6.email:

**Field**: ``email``

**Type:** :ref:`String <savlibrarykickstarter:string>`

.. _editView.116452986.131916066.222419149.tx_savlibraryexample6.email_flag:

**Field**: ``email_flag``

**Type:** :ref:`Checkbox <savlibrarykickstarter:checkbox>`

**Configuration:**

::

  - fusion = begin
  - mail = 1
  - fieldforcheckmail = email
  - mailsender = conference.organization@example.com
  - mailreceiverfromfield = email
  - mailsubject = $$$mailSubject$$$
  - mailmessage = $$$mailMessage$$$
  - mailmessagelanguagefromfield = email_language


.. _editView.116452986.131916066.222419149.tx_savlibraryexample6.email_language:

**Field**: ``email_language``

**Type:** :ref:`Selectorbox <savlibrarykickstarter:selectorbox>`

**Configuration:**

::

  - fusion = end


.. _editView.116452986.131916066.222419149.tx_savlibraryexample6.invoice:

**Field**: ``invoice``

**Type:** :ref:`Link <savlibrarykickstarter:link>`

**Configuration:**

::

  - generatertf = 1
  - templatertf = fileadmin/invoice.rtf
  - savefilertf = fileadmin/###tx_savlibraryexample6.name###.rtf





