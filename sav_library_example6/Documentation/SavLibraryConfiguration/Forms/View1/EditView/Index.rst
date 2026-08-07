.. include:: ../../../../Includes.txt

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

.. _editView.116452986.131916066.217895432.tx_savlibraryexample6.name:

.. card::
   :class: mb-md-2

  :Field: name

  :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`

.. _editView.116452986.131916066.217895432.tx_savlibraryexample6.address:

.. card::
   :class: mb-md-2

  :Field: address

  :Type: :ref:`Text <yolftypo3/sav-library-kickstarter:textarea>`

.. _editView.116452986.131916066.217895432.tx_savlibraryexample6.registration:

.. card::
   :class: mb-md-2

  :Field: registration

  :Type: :ref:`Checkboxes <yolftypo3/sav-library-kickstarter:checkboxes>`

  :Configuration:

  ::

    - cols = 1


.. _editView.116452986.131916066.217895432.tx_savlibraryexample6.email:

.. card::
   :class: mb-md-2

  :Field: email

  :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`

.. _editView.116452986.131916066.217895432.tx_savlibraryexample6.email_flag:

.. card::
   :class: mb-md-2

  :Field: email_flag

  :Type: :ref:`Checkbox <yolftypo3/sav-library-kickstarter:checkbox>`

  :Configuration:

  ::

    - fusion = begin
    - mail = 1
    - fieldforcheckmail = email
    - mailsender = conference.organization@example.com
    - mailreceiverfromfield = email
    - mailsubject = $$$mailSubject$$$
    - mailmessage = $$$mailMessage$$$
    - mailmessagelanguagefromfield = email_language


.. _editView.116452986.131916066.217895432.tx_savlibraryexample6.email_language:

.. card::
   :class: mb-md-2

  :Field: email_language

  :Type: :ref:`Selectorbox <yolftypo3/sav-library-kickstarter:selectorbox>`

  :Configuration:

  ::

    - fusion = end


.. _editView.116452986.131916066.217895432.tx_savlibraryexample6.invoice:

.. card::
   :class: mb-md-2

  :Field: invoice

  :Type: :ref:`Link <yolftypo3/sav-library-kickstarter:link>`

  :Configuration:

  ::

    - generatertf = 1
    - templatertf = fileadmin/invoice.rtf
    - savefilertf = fileadmin/###tx_savlibraryexample6.name###.rtf