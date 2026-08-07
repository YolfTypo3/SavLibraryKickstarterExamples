.. include:: ../../../../Includes.txt

.. _specialView.3946257:
.. role:: red

============
Special view
============

The special view ``FORM_Update`` is a ``formView``
and contains the following configuration.


Item Template
=============

::

   <div class="colLeft">
     <div class="label">$$$label[firstname]$$$</div>
     <div class="field">###field[firstname]###</div>
     <div class="label">$$$label[lastname]$$$</div>
     <div class="field">###field[lastname]###</div>
     <div class="label">$$$label[website]$$$</div>
     <div class="field">###field[website]###</div>
     <div class="label">###button[submit]###</div>
   </div>
   <div class="colRight">
      <div class="label">$$$label[message]$$$</div>
      <div class="field"> ###field[message]###</div>
   </div>

Selected Fields
===============

.. _specialView.3946257.64388392.217895432.tx_savlibraryexample7_guests.firstname:

.. card::
   :class: mb-md-2

  :Field: firstname

  :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`

  :Configuration:

  ::

    - addedit = 1
    - required = 1
    - checkedinupdateformadmin = 1


.. _specialView.3946257.64388392.217895432.tx_savlibraryexample7_guests.lastname:

.. card::
   :class: mb-md-2

  :Field: lastname

  :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`

  :Configuration:

  ::

    - addedit = 1
    - required = 1
    - checkedinupdateformadmin = 1


.. _specialView.3946257.64388392.217895432.tx_savlibraryexample7_guests.email:

.. card::
   :class: mb-md-2

  :Field: email

  :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`

.. _specialView.3946257.64388392.217895432.tx_savlibraryexample7_guests.website:

.. card::
   :class: mb-md-2

  :Field: website

  :Type: :ref:`Link <yolftypo3/sav-library-kickstarter:link>`

  :Configuration:

  ::

    - addedit = 1
    - checkedinupdateformadmin = 1


.. _specialView.3946257.64388392.217895432.tx_savlibraryexample7_guests.message:

.. card::
   :class: mb-md-2

  :Field: message

  :Type: :ref:`Text <yolftypo3/sav-library-kickstarter:textarea>`

  :Configuration:

  ::

    - addedit = 1
    - required = 1
    - checkedinupdateformadmin = 1