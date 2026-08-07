.. include:: ../../../../Includes.txt

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

.. _singleView.116452986.107716962.217895432.tx_savlibraryexample6.name:

.. card::
   :class: mb-md-2

  :Field: name

  :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`

.. _singleView.116452986.107716962.217895432.tx_savlibraryexample6.address:

.. card::
   :class: mb-md-2

  :Field: address

  :Type: :ref:`Text <yolftypo3/sav-library-kickstarter:textarea>`

.. _singleView.116452986.107716962.217895432.tx_savlibraryexample6.registration:

.. card::
   :class: mb-md-2

  :Field: registration

  :Type: :ref:`Checkboxes <yolftypo3/sav-library-kickstarter:checkboxes>`

  :Configuration:

  ::

    - cols = 1


.. _singleView.116452986.107716962.217895432.tx_savlibraryexample6.email:

.. card::
   :class: mb-md-2

  :Field: email

  :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`

  :Configuration:

  ::

    - func = makeEmailLink


.. _singleView.116452986.107716962.217895432.tx_savlibraryexample6.email_flag:

.. card::
   :class: mb-md-2

  :Field: email_flag

  :Type: :ref:`Checkbox <yolftypo3/sav-library-kickstarter:checkbox>`

  :Configuration:

  ::

    - fusion = begin


.. _singleView.116452986.107716962.217895432.tx_savlibraryexample6.email_language:

.. card::
   :class: mb-md-2

  :Field: email_language

  :Type: :ref:`Selectorbox <yolftypo3/sav-library-kickstarter:selectorbox>`

  :Configuration:

  ::

    - fusion = end


.. _singleView.116452986.107716962.217895432.tx_savlibraryexample6.invoice:

.. card::
   :class: mb-md-2

  :Field: invoice

  :Type: :ref:`Link <yolftypo3/sav-library-kickstarter:link>`

  :Configuration:

  ::

    - generatertf = 1
    - savefilertf = fileadmin/###tx_savlibraryexample6.name###.rtf